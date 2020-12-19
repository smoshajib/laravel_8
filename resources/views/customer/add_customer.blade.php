@extends('admin_master')
@section('admin-content')

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN THEME CUSTOMIZER-->
        <div id="theme-change" class="hidden-phone">
            <i class="icon-cogs"></i>
            <span class="settings">
                <span class="text">Theme Color:</span>
                <span class="colors">
                    <span class="color-default" data-style="default"></span>
                    <span class="color-green" data-style="green"></span>
                    <span class="color-gray" data-style="gray"></span>
                    <span class="color-purple" data-style="purple"></span>
                    <span class="color-red" data-style="red"></span>
                </span>
            </span>
        </div>
        <!-- END THEME CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Add Category
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
                <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Metro Lab</a>
                <span class="divider">/</span>
            </li>
            <li class="active">
                Dashboard
            </li>
            <li class="pull-right search-wrap">
                <form action="search_result.html" class="hidden-phone">
                    <div class="input-append search-input-area">
                        <input class="" id="appendedInputButton" type="text">
                        <button class="btn" type="button"><i class="icon-search"></i> </button>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="widget yellow">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Add Category</h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="widget-body form">
                <!-- BEGIN FORM-->

                <form class="cmxform form-horizontal" id="commentForm" method="get" action="">
                    <div class="control-group ">
                        <label for="cname" class="control-label">Name (required)</label>
                        <div class="controls">
                            <input class="span6 " id="cname" name="name" minlength="2" type="text" required />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="cemail" class="control-label">E-Mail </label>
                        <div class="controls">
                            <input class="span6 " id="cemail" type="email" name="email" required />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">Phone</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="text" name="phone" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">Experience</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="text" name="experience" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">Salary</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="text" name="salary" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">Vacation</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="text" name="vacation" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">City</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="text" name="city" />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="curl" class="control-label">Photo</label>
                        <div class="controls">
                            <input class="span6 " id="curl" type="file" name="photo" />
                        </div>
                    </div>
                    
                    
                    <div class="control-group ">
                        <label for="ccomment" class="control-label">Address</label>
                        <div class="controls">
                            <textarea class="span6 " id="ccomment" name="address" required></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn" type="button">Cancel</button>
                    </div>


                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
@endsection


