<?php
return "
<style type='text/css'>
        * {margin: 0; padding: 0;}
        #container {height: 100%; width:100%; font-size: 0;}
        #left, #middle {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
        #left {width: 5%; background: lightgrey;}
        #middle {width: 50%; background: antiquewhite;}
    </style>
<div id='container'>
    <div id='left'>
        Left Stuff
    </div>
    <div id='middle'>
        <form action='index.php?page=submit' method='post'>
            <div class='form-group'>
                <label for='usr'>Enter a real number:</label>
                <input type='text' name='intText' class='form-control' id='usr'>
            </div>
            <button type='submit' name='BtnSubmit' class='btn btn-primary'>Submit</button>
            Will increment.mac it by one
        </form>
    </div>";