<!--Alert HTML-->
<div class="alerts">
    <div class="alert-click">
        <span class="alert-icon"><img src="images/icon-alert.svg" width="20" /></span>
        <span class="alert-content">Alert</span>
        <span class="alert-text" id="login-section"><i class="material-icons">keyboard_arrow_down</i></span>
    </div>
    <div class="alerts-popup"> 
        <div class="nav nav-tabs" id="alertTab" role="tablist">
            <a class="nav-item nav-link show active" id="team-tab" data-toggle="tab" href="#team" role="tab" aria-controls="team" aria-selected="true">Team</a>
            <a class="nav-item nav-link" id="section-tab" data-toggle="tab" href="#section" role="tab" aria-controls="section" aria-selected="false">Section</a>
        </div>
        <div class="tab-content" id="alertTabContent">
            <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
                <div class="alert-chk-box-container">
                    <div class="checkbox-collapse-container">
                        <label class="checkbox-container selectall"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Select All</span>
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 1</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 2</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Priority</label>
                    <div class="col nobackground-hideselection pl-0">
                        <input type="text" name="exp-expressive" data-provide="slider" data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="4" data-slider-tooltip="hide" data-slider-ticks-labels='["Low", "High"]'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox-collapse-container">
                    <span class="checkbox-value">Pinned Alert 1</span><label class="checkbox-container mt-1"><input type="checkbox"><span class="checkmark"></span></label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Choose Date</label>
                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary border-radius">Cancel</button>
                    <button type="button" class="btn btn-primary border-radius">Send</button>
                </div>
            </div>
            <div class="tab-pane fade" id="section" role="tabpanel" aria-labelledby="section-tab">
                <div class="alert-chk-box-container">
                <div class="checkbox-collapse-container">
                        <label class="checkbox-container selectall"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Select All</span>
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 1</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 2</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 3</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-head"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Team 4</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                    <div class="checkbox-collapse-container">
                    <label class="checkbox-container team-member"><input type="checkbox"><span class="checkmark"></span></label>
                        <span class="checkbox-value">Member</span>                    
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Priority</label>
                    <div class="col nobackground-hideselection pl-0">
                        <input type="text" name="exp-expressive" data-provide="slider" data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="4" data-slider-tooltip="hide" data-slider-ticks-labels='["Low", "High"]'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="checkbox-container mt-1">Pinned Alert 2
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group">
                    <label>Choose Date</label>
                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary border-radius">Cancel</button>
                    <button type="button" class="btn btn-primary border-radius">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Alert Marquee-->
<div class="alert-marquee"><marquee>Dis curabitur gravida conubia fusce fusce molestie augue lacinia at vulputate</marquee></div>
