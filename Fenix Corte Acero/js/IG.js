// JavaScript Document
$( document ).ready(function(){

var userFeed=new Instafeed({
get:'user',
userId:'8228764967',
accesToken:'8228764967.1677ed0.2a902e0c36ad40d297ac1406638044c9',
limit:9,
resolution:'low_resolution',
sortBy: 'most-recent',
template: '<div class="col1"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}"></a></div>',	
});
userFeed.run();	

});