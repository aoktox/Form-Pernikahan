<!DOCTYPE HTML>
<html ng-app="dropdownApp">
<head>
  <meta charset="utf-8" />
  <title>Semantic UI + Angular.JS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.css') }}">
    <script src="{{ asset('semantic/js/jquery-1.11.3.min.js') }}"></script>
    {{--<script src="{{asset('semantic/dist/semantic.js')}}"></script>--}}
    <script src="{{asset('angular/angular.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('semantic/js/wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('semantic/js/controllers.js')}}" type="text/javascript"></script>
</head>
<body ng-controller="RootCtrl">
    <h2>Wizard</h2>
  
    <p class="ui info message">
      Current step: <strong>{{--{{ currentStep }}--}}</strong>
    </p>
  
    <p class="ui message" ng-show="isFinished">
      Finished!
    </p>
  
    <wizard fullwidth="true" on-finish="isFinished = true" current-step="currentStep">
      <wizard-pane title="Satu">
        <h1>Step 1</h1>
        <form name="step1form">
            <div class="ui input">
              <input type="text">
            </div>
          <button type="submit" class="ui button" wz-next>Next</button>
        </form>
      </wizard-pane>
        <wizard-pane title="Satu">
            <h1>Step 1</h1>
            <form name="step1form">
                <div class="ui input">
                    <input type="text">
                </div>
                <button type="submit" class="ui button" wz-next>Next</button>
            </form>
        </wizard-pane>
        <wizard-pane title="Satu">
            <h1>Step 1</h1>
            <form name="step1form">
                <div class="ui input">
                    <input type="text">
                </div>
                <button type="submit" class="ui button" wz-next>Next</button>
            </form>
        </wizard-pane>
        <wizard-pane title="Satu">
            <h1>Step 1</h1>
            <form name="step1form">
                <div class="ui input">
                    <input type="text">
                </div>
                <button type="submit" class="ui button" wz-next>Next</button>
            </form>
        </wizard-pane>
      <wizard-pane title="Step2">
        <h1>Step 2</h1>
        <form name="step2form">
            <div class="ui input">
              <input type="text">
            </div>
          <button type="submit" class="ui button" wz-next>Next</button>
        </form>
      </wizard-pane>
      <wizard-pane title="Step3">
        <h1>Step 3</h1>
        <form name="step3form">
            <div class="ui input">
              <input type="text">
            </div>
          <button type="submit" class="ui button" wz-finish>Finish</button>
          <button type="submit" class="ui button" wz-previous>Previous</button>
        </form>
      </wizard-pane>
  </wizard>
</body>
</html>
