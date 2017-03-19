var app = angular.module("runoobApp",[]);
app.controller('xheaderCtrl',function(){
	
})
app.directive('xheader',function(){
	return {
		templateUrl:'directive/xheader.html'
	}
})
//react vue 
app.controller('xnavCtrl',function($scope){
	$scope.navs = [{
		name:'首页1',
		link:'http://www.runoob.com/',
	},{
		name:'HTML',
		link:'http://www.runoob.com/html/html-tutorial.html',
	},{
		name:'CSS',
		link:'http://www.runoob.com/css/css-tutorial.html',
	}]
})
app.directive('xnav',function(){
	return {
		templateUrl:'directive/xnav.html',
		link:function(s,e,a){
			//console.log(ele)
			e.find('ul').addClass('abc');
			$(e).addClass("cba")
		}
	}
})