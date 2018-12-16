@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Overview</li>
</ol>

<div class="content" style="
    font-family: Montserrat, sans-serif; font-weight: 500;>
            <div class="container"  style=" padding-bottom: 80px;">
                @if($obj)
                @foreach($obj as $obj)
                <div class="bookin-info table-responsive" style="background-color: #efefef;">
                	<table class="bookin-table">
                        <tbody>
                        <tr>
                            <th colspan="6" class="table-heading">Event Name : {{ $obj->title }}<a href="#" class="icon icon-delete float-right" style="margin-left: 15px;">Delete</a><a href="#" class="icon icon-delete">Edit</a></th>
                        </tr>
                        <tr>
                            <td class="first Theading">Event Description</td>
                        </tr>
                        
                        <tr>
                            <td class="first">
                                <p>{{ $obj->description }}
                                </p>
                            </td>
                        </tr>

                    </tbody></table>
                    <table class="bookin-table">
                        <tbody>
                        <tr>
                            <td class="Theading">Event Type</td>
                            <td class="Theading">Event Date</td>
                            <td class="Theading">Event Time</td>
                            <td class="Theading">Max Guest</td>
                            <td class="Theading">Meal Plans</td>
                            <!--
                            <td class="Theading">Event Location</td>
                            <td class="Theading">Event Sponsors</td>
                            <td class="Theading">Meal Plans</td>
                            <td class="Theading">Type Of Meal</td>
                            <td class="Theading">Special Meal</td>
                            <td class="Theading">Meal Time</td>
                            <td class="Theading">Price Range</td>
                            <td class="Theading last">Min. Booking Amount to Pay</td>
                        -->
                        </tr>
                        <tr>
                            
                            <td>
                                <label>Event Type</label>
                                <p>{{ $obj->event_type }}</p>
                            </td>
                            <td>
                                <label>Event Date</label>
                                <p>{{ $obj->day }}</p>
                            </td>
                            <td>
                                <label>Event Time</label>
                                <p>At {{ $obj->hour }} hour {{ $obj->min }} min</p>
                            </td>
                            <td >
                                <label>Max Guest</label>
                                <p>{{ $obj->guest }} <a href="#" class="icon icon-edit"></a></p>
                            </td>
                            <td>
                                <label>Meal Plans</label>
                                <p>{{ $obj->catering_info }}</p>
                            </td>
                            <!--
                            <td>
                                <label>Event Location</label>
                                <p>{{ $obj->location }}</p>
                            </td>
                            <td>
                                <label>Event Sponsors</label>
                                <p>{{ $obj->sponsors }}</p>
                            </td>
                        -->
                            
                        </tr>
                    </tbody></table>
                    <table class="bookin-table">
                        <tbody>
                        <tr>
                            <td class="first Theading">Event Location</td>
                            <td class=" Theading">Event Sponsors</td>
                        </tr>
                        <tr>
                            <td class="first">
                                <label>Event Location</label>
                                <p>{{ $obj->location }}</p>
                            </td>
                            <td >
                                <label>Event Sponsors</label>
                                <p>{{ $obj->sponsors }}</p>
                            </td>
                        </tr>
                    </tbody></table>
                    <table class="bookin-table">
                        <tbody>
                        <tr>
                            <td class="first Theading">Special Requirements</td>
                            <td class="Theading">Requirements In Describe</td>
                        </tr>
                        <tr>
                            
                            <td class="first">
                                <label>Special Requirements</label>
                                <p>{{ $obj->special_requirements }}</p>
                            </td>
                            <td >
                                <label>Describe</label>
                                <p>{{ $obj->describe }}</p>
                            </td>
                            
                        </tr>
                    </tbody></table>
                    <table class="bookin-table">
                        <tbody>
                        <tr>
                            <td class="first Theading">Type Of Meal</td>
                            <td class="first Theading">Special Meal</td>
                            <td class="Theading">Meal Time</td>
                            <td class="Theading">Meal Set</td>
                        </tr>
                        <tr>
                            @if($obj->catering_info=='Yes')
                            <td class="first">
                                <label>Type Of Meal</label>
                                <p>{{ $obj->type_of_catering }}</p>
                            </td>
                            <td class="first">
                                <label>Special Meal</label>
                                <p>{{ $obj->special_catering }}</p>
                            </td>
                            <td >
                                <label>Meal Time</label>
                                <p>{{ $obj->time_of_food }}</p>
                            </td>
                            <td >
                                <label>Meal Set</label>
                                <p>{{ $obj->catered_numbers }}</p>
                            </td>
                            @else
                            <td class="first">
                                <label>Type Of Meal</label>
                                <p>-----</p>
                            </td>
                            <td class="first">
                                <label>Special Meal</label>
                                <p>-----</p>
                            </td>
                            <td >
                                <label>Meal Time</label>
                                <p>-----</p>
                            </td>
                            <td >
                                <label>Meal Set</label>
                                <p>-----</p>
                            </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
                </table>

                    <table class="bookinTotal">
                        <tr>
                            <td class="subTotal">Subtotal</td>
                            <td class="amount subTotal">৳ <input type="text" name="subtotal" placeholder="Input Total Amount" size="16" align="right" direction:RTL></td>
                        </tr>
                        <tr>
                            <td >Min. Booking Amount to pay</td>
                            <td class="amount">৳ <input type="text" name="afterdiscount" placeholder="After Discount Pay" size="16" align="right" direction:RTL></td>
                        </tr>
                    </table>
                    <div class="bookinRow">
                        <div class="input-box">
                            <label>Your Name :</label>
                            <input type="text" placeholder="User name">
                        </div>
                        <div class="input-box">
                            <label>Address :</label>
                            <input type="text" placeholder="Home Address">
                        </div>
                        <div class="input-box">
                            <label>Phone :</label>
                            <input type="text" placeholder="1234568970">
                        </div>
                        <a 
style="border: solid 1px #f15b22;
border-radius: 3px;
box-shadow: inset 0px 1px 0px #e0a97f;
background: #f15b22;
color: #fff;" href="#" class="btn eventbtn">Book Now</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
@stop