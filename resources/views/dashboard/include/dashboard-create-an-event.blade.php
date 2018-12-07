    <!-- Modal -->
<form action="{{ URL::to('eventStore') }}" method="post">
                    {{ csrf_field() }}
    <div class="modal fade creat-event" id="creat-event">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>CREATE EVENT</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div class="row">

                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20">TITLE</label>
                                    <input type="text" name="title" class="form-control" placeholder="No more than one booking can be placed at a time" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DESCRIPTION</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea" placeholder="In eu urna enim. Cras hendrerit ullamcorper malesuada. In justo lacus, pharetra nec imperdiet sed, congue at metus. Mauris eleifend nec neque in pretium. Nulla eleifend, enim ultrices ultrices ullamcorper."
                                        rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DAY</label>
                                    <div class='input-group clockpicker' id='datetimepicker1'>
                                        <input name="date" type="date" class="form-control" required/>
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
<!---->
                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">HOUR</label>
                                    <div class="input-group clockpicker">
                                        <input name="hour" type="digit" class="form-control" placeholder="hh" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'hh'" required/>
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">MINUTE</label>
                                    <div class="input-group clockpicker">
                                        <input name="min" type="text" class="form-control" placeholder="ii" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'ii'" required/>
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
<!--
                                <div class="col-md-3" style="padding-left: 0px;">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DURATION</label>
                                    <div class="input-group clockpicker">
                                        <select>
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">LOCATION</label>
                                    <div class="input-group clockpicker">
                                        <input name="location" type="text" class="form-control b-r-0" placeholder="Building, Street, City" required/>
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-crosshairs"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <label class="m-t-20">ADD SPONSORS</label>
                            <div class="input-group">
                                <input name="sponsors" type="text" class="form-control" placeholder="Society / Organisation">
                                <span class="input-group-text">
                                     <i class="fa fa-search"></i>
                                </span>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">TOTAL GUESTS</label>
                                    <select class="form-control" id="event-guest" name="event-guest">
        <option value="">Please select</option>
    @foreach($eventguest as $guest)
        <option value="{{$guest->event_guest_menu}}">{{$guest->event_guest_menu}}</option>
    @endforeach
        <option value="Other">Other(Describe in description box)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="val-skill">Event Type</label>
                                    <select class="form-control" id="event-type" name="event-type">
        <option value="">Please select</option>
    @foreach($eventtype as $type)
        <option value="{{$type->event_catagory}}">{{$type->event_catagory}}</option>
    @endforeach
        <option value="Other">Other(Describe in description box)</option>
                                    </select>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger m-t-50" data-toggle="modal" data-target="#special-requirements">NEXT STEP</button>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #create event modal -->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- Special Requirements -->
    <div class="modal fade creat-event" id="special-requirements">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="margin-bottom: 20px;">
                    <h2>CREATE EVENT</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <h6 style="padding-bottom: 5px;"><strong>SPECIAL REQUIREMENTS</strong></h6>
                            @if(count($requirecheckbox))
                @foreach($requirecheckbox as $d)
                            <div class="row" style="margin-bottom: 5px;">
                              <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                  <input name="required[]" type="checkbox" class="custom-control-input" id="{{ $d->id }}" value="{{ $d->option }}">

                                  <label class="custom-control-label" for="{{ $d->id }}">{{ $d->option }}</label>
                                </div>
                              </div>
                            </div>
                            @endforeach
                            @endif
                            <br>

<!-- AV requirement? radio button code croped and placed extend php file for testing -->

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-15" for="exampleFormControlTextarea">DESCRIBE</label>
                                    <textarea name="describe" class="form-control" id="exampleFormControlTextarea" placeholder="Describe Special Requirements such as seating, tables or anything that is not menitoned above that you may need from us"
                                        rows="4"></textarea>
                                </div>
                            </div>
                            <br>
                            <label>** If you need anything that of your choice, you must attend OUR user group meeting which is held in the OUR Office Room **</label>
                        </div>

                        <div class="col-xl-5">
                            <h6 style="padding-bottom: 7px;"><strong>CATERING INFORMATION</strong></h6>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Do you require catering?</label>
                                      <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadioInline3">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input value="no" type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input" checked>
                                          <label class="custom-control-label" for="customRadioInline4">No</label>
                                        </div>
                                </div>
                            </div>
                            <div class="row abc">
                                <div class="col-md-12">
                                    <label class="m-t-5">Type of Catering / Dishes required</label>
                                    <input name="typeofcatering" name="catering1" class="second" type="text" size="45" required>
                                </div>
                            </div>
                            <div class="row abc">
                                <div class="col-md-12">
                                    <label class="m-t-10">Special Requirements (ie diets etc)</label>
                                    <input name="specialrequirement" class="second" type="text" size="45">
                                </div>
                            </div>
                            <div class="row abc">
                                <div class="col-md-12">
                                    <label class="m-t-10">Time Food is required</label>
                                    <input name="timeoffood" class="second" type="text" size="45" required>
                                </div>
                            </div>
                            <div class="row abc">
                                <div class="col-md-12">
                                    <label class="m-t-10">Catered Numbers</label>
                                    <input name="caterednumber" class="second" type="text" size="45" required>
                                </div>
                            </div>
                            <br>
                            <label>** Confirmation of numbers is required 5 working days before the function. Failure to do so will result in payment based on original numbers **</label>
                            <button type="button" data-dismiss="modal" class="btn btn-secondary m-t-5">PREVIOUS STEP</button>
                            <button type="button" class="btn btn-danger m-t-5" data-toggle="modal" data-target="#rules-and-conditions">NEXT STEP</button>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- #create event modal -->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- Rules and Conditions -->
    <div class="modal fade creat-event" id="rules-and-conditions">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="margin-bottom: 20px;">
                    <h2>Rules and Conditions</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                    @if(count($rule))
                        @foreach($rule as $d)
                            <button type="button" class="list-group-item list-group-item-action">{{ $d->describe }}</button>
                        @endforeach
                    @endif
                      <label style="margin-top: 10px;">** PLEASE NOTE THIS BOOKING IS NOT APPROVED UNTIL AN E-MAIL CONFIRMATION IS RECEIVED.  Any booking forms submitted on Fridays and Holidays will not be seen **</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="margin-top: 15px;">
                      <input type="checkbox" class="custom-control-input" id="customCheck5" value=1 onclick="disabler(this);">
                      <label class="custom-control-label" for="customCheck5">I have read the terms and conditions</label>
                    </div>
                    <div style="float: right; margin-bottom: 15px;">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary m-t-5">PREVIOUS STEP</button>
                    <button type="submit" class="abcd btn btn-danger m-t-5" >SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- #create event modal -->
<body>
<script>
    $('#date').datetimepicker({
        format: 'yyyy-mm-dd',
        weekStart: 1,
        todayBtn:  true,
        autoclose: true,
        todayHighlight: true,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script></body>