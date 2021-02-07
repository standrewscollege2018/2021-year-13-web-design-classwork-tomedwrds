/// @description Insert description here
// You can write your code in this editor
var view_width = 256;
var view_height = 144;
var object_following = obj_player



view_camera[0] = camera_create_view(0, 0, view_width, view_height,0,object_following,-1,-1,view_width/2,view_height/2);
view_visible[0] = true