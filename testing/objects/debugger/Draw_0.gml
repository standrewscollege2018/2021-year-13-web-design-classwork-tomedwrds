/// @description Insert description here
// You can write your code in this editor

//Draw grid lines
if debugging 
{
	for(var xx = -1; xx < room_width; xx += 16)
	{
		draw_line(xx, 0, xx, room_height)
	}

	for(var yy = -1; yy < room_height; yy += 16)
	{
		draw_line(0, yy, room_width, yy)
	}
}