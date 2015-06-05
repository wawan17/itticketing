/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Styling front */
$(document).ready(function () {
    $(".content").each(function(){
        var leftP = $(this).css("left");
        var leftPInt = leftP.replace("px","");
        var topP = $(this).css("top");
        var topPInt = topP.replace("px","");
        if (leftPInt == 0 || leftPInt >= 500) {
            $(this).addClass("no-lr-border");
        }
        if (topPInt==0) {
            $(this).css({"margin-top":"30px"});
        }
    });
});
/* End styling front */