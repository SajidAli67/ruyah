<?php

function store_module(){
	if(app_version()>=2.7){
    	return true;
	}
  }

function special_access(){
	if(is_admin()){
		return true;
	}
	else if(is_store_admin()){
		if(store_module()){
			return false;
		}
		return true;
	}
}