

<p> hello </p>
<!--<div ng-controller="Content" > -->

<!--<div ng-repeat="page in pagess"> -->

		<h1>  
                    <div ng-bind-html="pagess.content"></div>
                        {{pagess.id}}
			{{pagess.title}}
                        {{pagess.url}}
                        {{pagess.slug}}
                        {{pagess.type}}
                
                </h1>
	<!--</div> -->
            <button ng-click ="loadData()"> Refresh </button>
	<!--</div> -->
<!--</div> -->



    





