var app = angular.module('wscat', []);
		console.log(app);
		app.controller('indexCtrl', function($scope) {
			$scope.test = 'test'
			$scope.name = "wscat";
		});
		app.directive('wscat',function(){
			return {
				template:"<p>{{name}}</p>"
			}
		})
		//指令 等同于组件 ng-repeat ng-click ng-app
		//指令的匿名函数返回的是对象
		app.directive('ngWscat', function() {
				return {
					//限制规则
					//element
					//attribute
					//class
					//M注释的存在
					restrict: 'ACE',
					//模板
					template: '<div class="weui-tab">' +
						'<div class="weui-navbar">' +
						'<div class="weui-navbar__item weui-bar__item_on">选项一</div>' +
						'<div class="weui-navbar__item">选项二</div>' +
						'<div class="weui-navbar__item">选项三</div>' +
						'</div>' +
						'<div class="weui-tab__panel"></div></div>',
					//templateUrl:
//					replace:true,
				}
			})
		app.directive("danxuankuang",function(){
			return {
				templateUrl:'directive/danxuankuang.html'
			}
		})
			//app.service();
			//app.filter();