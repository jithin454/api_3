<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    </head>
<body ng-app="myApp" ng-controller="controller">
<form >
  <label for="appt">click here to set time</label>
  <hr/>
  <input type="time"  name="time" ng-model="time">
  <hr>
  <input type="submit" style="width:100px" value="Submit" ng-click="insert()">
</form>
<script src="app/controllers/controller.js">
</script>
</body>
</html>
