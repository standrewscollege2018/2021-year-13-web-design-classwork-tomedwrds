/// @description Move the player

//movement
hsp = (keyboard_check(ord("D")) || keyboard_check(vk_right)) - (keyboard_check(ord("A")) || keyboard_check(vk_left));
vsp = (keyboard_check(ord("S")) || keyboard_check(vk_down)) - (keyboard_check(ord("W")) || keyboard_check(vk_up));

hsp *= move_speed;
vsp *= move_speed;


if place_meeting(x+hsp,y,obj_collison)
{
	repeat(abs(hsp))
	{
		if !place_meeting(x+sign(hsp),y,obj_collison)
		{
			x += sign(hsp);
		}
	}
}
else
{
	x += hsp;	
}

if place_meeting(x,y+vsp,obj_collison)
{
	repeat(abs(vsp))
	{
		if !place_meeting(x,y+sign(vsp),obj_collison)
		{
			y	 += sign(vsp);
		}
	}
}
else
{
	y += vsp;	
}
	




