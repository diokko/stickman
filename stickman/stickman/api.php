<?php
    /*
     * @direction : text --can be : "right", "left", "up", "down"
     * return : nothing 
     * action : moving the stickman to the @direction
     * can be called only 5 times in a turn
    */
    function move(direction) {

    }

    /* 
     * return : object : {potion4;stickman1;weapon3;stickman2}
     * action : stickman ask what is on his own cell
    */
    function look() {

    }

    /*
     * return : nothing
     * action : stickman protect himself against attack until next round
    */
    function protect() {

    }

    /*
     * @id can be : integer --can be : 1, 2, 3, ...
     * return : object : {hited:true}
     * action : attack the stickman with the concerned id on the current cell
    */
    function attack(id) {

    }

    /*
     * @id can be : integer --can be : 1, 2, 3, ...
     * return : object : {grabbed:true}
     * action : grab the item with the concerned id on the current cell
    */
    function grab(id) {

    }

    /*
     * @id can be : integer --can be : 1, 2, 3, ...
     * return : object : {used:true}
     * action : use the item with the concerned id on the stickman
    */
    function use(id) {

    }

    /*
     * return : object : {leaved:true}
     * action : leave the stickman from arena
    */
    function leave() {

    }

    /*
     * return : object --can be : {x:5;y:6}
     * action : return the position in the grid of the stickman
    */
    function getPos() {

    }

    
?>