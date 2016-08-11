@extends('layout.admin')
@section('extendCss')
<link rel="stylesheet" href="/assets/css/compiled/new-user.css" type="text/css" media="screen" />
@endsection
@section('title', '后台首页')
@section('content')
<div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>Create a new user</h3>
            </div>


            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">

                        <form id="togglingForm" method="post" class="new_user_form inline-input">
                            <div class="form-group span12 field-box">
                                <label>Name:</label>
                                <input class="span9" type="text" name="username"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>mobile:</label>
                                <input class="span9" type="text" name="mobile"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>state:</label>
                                <select>
                                    <option value="AK" />Alaska
                                    <option value="HI" />Hawaii
                                    <option value="CA" />California
                                    <option value="NV" />Nevada
                                    <option value="OR" />Oregon
                                    <option value="WA" />Washington
                                    <option value="AZ" />Arizona
                                </select>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>email:</label>
                                <input class="span9" type="text" name="email"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>address:</label>
                                <div class="address-fields">
                                <input class="span12" type="text" placeholder="Street address" />
                                <input class="span12 small" type="text" placeholder="City" />
                                <input class="span12 small" type="text" placeholder="State" />
                                <input class="span12 small last" type="text" placeholder="Postal Code" />
                                </div>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>job:</label>
                                <input class="span9" type="text" name="job"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>company:</label>
                                <input class="span9" type="text" name="company"/>

                            </div>

                            <div class="form-group span11 field-box actions ">
                                <input type="submit" class="btn-glow primary" value="Create user" />
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset" />

                            </div>
                        </form>
                    </div>
                </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        Click above to see difference between inline and normal inputs on a form
                    </div>
                    <h6>Sidebar text for instructions</h6>
                    <p>Add multiple users at once</p>
                    <p>Choose one of the following file types:</p>
                    <ul>
                        <li><a href="#">Upload a vCard file</a></li>
                        <li><a href="#">Import from a CSV file</a></li>
                        <li><a href="#">Import from an Excel file</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extendJs')
    <script>
        $(document).ready(function() {
            $('#togglingForm')
                    .bootstrapValidator({
                        excluded: [':disabled'],
                        message: 'This value is not valid',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },

                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: 'The first name is required'
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'The last name is required'
                                    }
                                }
                            }

                        }
                    })

        });
    </script>
@endsection

