jQuery(document).ready(function(a){bootstrap_switch_call();Switchery_call();ladda_call()});function bootstrap_switch_call(){$(".switchCheckBox").bootstrapSwitch()}function Switchery_call(){var d={color:"#64bd63",secondaryColor:"#dfdfdf",className:"switchery",disabled:false,disabledOpacity:0.5,speed:"0.4s"};var a=Array.prototype.slice.call(document.querySelectorAll(".js-switch-dft"));a.forEach(function(k){var l=new Switchery(k)});var f=Array.prototype.slice.call(document.querySelectorAll(".js-switch-disabled"));f.forEach(function(l){var k=new Switchery(l,{disabled:true})});var j=Array.prototype.slice.call(document.querySelectorAll(".js-switch-red-dft"));j.forEach(function(l){var k=new Switchery(l,{color:$redActive})});var i=Array.prototype.slice.call(document.querySelectorAll(".js-switch-blue-dft"));i.forEach(function(l){var k=new Switchery(l,{color:$blueActive})});var h=Array.prototype.slice.call(document.querySelectorAll(".js-switch-light-blue-dft"));h.forEach(function(k){var l=new Switchery(k,{color:$lightBlueActive})});var e=Array.prototype.slice.call(document.querySelectorAll(".js-switch-default"));e.forEach(function(l){var k=new Switchery(l,{color:$defultColor})});var g=Array.prototype.slice.call(document.querySelectorAll(".js-switch-brown"));g.forEach(function(k){var l=new Switchery(k,{color:$brownActive})});var c=Array.prototype.slice.call(document.querySelectorAll(".js-switch-green"));c.forEach(function(k){var l=new Switchery(k,{color:$greenActive})});var b=Array.prototype.slice.call(document.querySelectorAll(".js-switch-light-green-dft"));b.forEach(function(l){var k=new Switchery(l,{color:$lightGreen})})}function ladda_call(){Ladda.bind("button.ladda-button",{timeout:2000})};