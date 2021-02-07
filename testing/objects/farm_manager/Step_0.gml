/// @description Insert description here
// You can write your code in this editor


if mouse_check_button_pressed(mb_left)
{
	var xx = 16*floor(mouse_x/16)
	var yy = 16*floor(mouse_y/16)
	instance_create_depth(xx,yy,0,obj_land)
}