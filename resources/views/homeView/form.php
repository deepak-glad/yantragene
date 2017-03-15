<div class="col-lg-8 col-md-4">
<form class="abc" name = "<?php echo "event".$i;?>" id="<?php echo"event".$i++;?>">
    <input  type="hidden" name="eventId" value="{{event.id}}">
    <!--<input type="hidden" name="_token" value="GUYBnyU1Nll1WozFTzxvcqJroe5MsBQd8SbpMReG">-->
    <label class="w3-label w3-text-teal"><b>Team Name</b></label>
    <input class="w3-input w3-border w3-light-grey" name="teamName" type="text" ng-maxlength="30" ng-model = "eventName" required>
    <span style = "color:red" ng-show = "eventRegForm.eventName.$dirty && eventRegForm.eventName.$invalid">
													<span ng-show = "eventRegForm.eventName.$error.required">Team Name is required.</span>
													<span ng-show = "eventRegForm.eventName.$error.maxlength">Team name should be less than 30 chars</span>
													</span>
    <div ng-repeat="n in range(2,event.teamSize)">
        <label class="w3-label w3-text-teal"><b>Member {{n}} Registered Email Add.</b></label>
        <input name="member_{{n}}" ng-model="p" class="w3-input w3-border w3-light-grey" type="email" >
        <span style = "color:red" ng-show = "eventRegForm['member_'+n].$dirty && eventRegForm['member_'+n].$invalid">
														<span ng-show = "eventRegForm['member_'+n].$error.required">Email is required.</span>
														<span ng-show = "eventRegForm['member_'+n].$error.email">Email should be like abc@cd.ef</span>
														</span>
    </div>
    <button type="submit" class="w3-btn w3-blue-grey team" style="margin-top:5px;">Register</button>
</form>
</div>