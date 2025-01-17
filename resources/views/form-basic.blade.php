@extends('Layouts.master')
@section('contents')
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Input Style</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use the input classes on an <code>input-default</code> for Default input.</p>
                                            <input type="text" class="form-control input-default " placeholder="Input Default">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use the input classes on an <code>input-flat</code> for flat input.</p>
                                            <input type="text" class="form-control input-flat" placeholder="Input Flat ">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use the input classes on an <code>input-rounded</code> for rounded input.</p>
                                            <input type="text" class="form-control input-rounded" placeholder="Input Rounded">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use the input classes on an <code>input-focus</code> for focus input.</p>
                                            <input type="text" class="form-control input-focus" placeholder="Input Focus">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Search Box Style</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use the classes on an <code>input-group</code>, <code>input-group-btn</code> for Default input group.</p>
                                            <div class="input-group input-group-default">
                                                <span class="input-group-btn"><button class="btn btn-primary" type="submit"><i class="ti-search"></i></button></span>
                                                <input type="text" placeholder="Search Default" name="Search" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use this class are <code>input-group-rounded</code> and <code>btn-group-right</code> for input group rounded with search icon.</p>
                                            <div class="input-group input-group-rounded">
                                                <input type="text" placeholder="Search Round" name="Search" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use this class <code>input-group-flat</code> , <code>input-group-close-icon</code> for flat input group with close icon.</p>
                                            <div class="input-group input-group-flat">
                                                <span class="input-group-btn"><button class="btn btn-primary" type="submit"><i class="ti-search"></i></button></span>
                                                <input type="text" class="form-control" placeholder="Search Default">
                                                <span class="input-group-btn"><button class="btn btn-primary input-group-close-icon" type="submit"><i class="ti-close"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Use this class are <code>input-group-rounded</code> , <code>btn-group-left</code> and <code>btn-group-right</code> for input group rounded with search icon.</p>
                                            <div class="input-group input-group-rounded">
                                                <span class="input-group-btn"><button class="btn btn-primary input-group-close-icon btn-group-left" type="submit"><i class="ti-close"></i></button></span>
                                                <input type="text" class="form-control" placeholder="Search Round">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Input Sizes</h4>


                                <p class="text-muted m-b-15 font-12">Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
                            </div>
                            <div class="card-body">
                                <div class="input-sizes">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="example-input-small" class="col-sm-3 control-label">Small</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder=".input-sm" class="form-control input-sm" name="example-input-small" id="example-input-small">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-input-normal" class="col-sm-3 control-label">Normal</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Normal" class="form-control" name="example-input-normal" id="example-input-normal">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-input-large" class="col-sm-3 control-label">Large</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder=".input-lg" class="form-control input-lg" name="example-input-large" id="example-input-large">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Grid Sizes</label>
                                            <div class="col-sm-2">
                                                <input type="text" placeholder=".col-sm-2" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-3" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-4" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-5 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-5" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-6" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-7 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-7" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-3">
                                                <input type="text" placeholder=".col-sm-8" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Basic Form</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <label>
													<input type="checkbox"> Check me out
												</label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Horizontal Form</h4>

                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
															<input type="checkbox"> Remember me
														</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Basic Elements</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Text</label>
                                                    <input type="text" class="form-control" value="Some text value...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input id="example-email" class="form-control" type="email" placeholder="Email" name="example-email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" value="password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Text area</label>
                                                    <textarea class="form-control" rows="3" placeholder="Text input"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Readonly</label>
                                                    <input class="form-control" type="text" value="Readonly value" readonly="">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Disabled</label>
                                                    <input class="form-control" type="text" value="Disabled value" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Static control</label>
                                                    <p class="form-control-static">email@example.com</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Helping text</label>
                                                    <input class="form-control" type="text" placeholder="Helping text">
                                                    <span class="help-block">
														<small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
													</span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Input Select</label>
                                                    <select class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Multiple Select</label>
                                                    <select multiple class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Horizontal Form Elements</h4>

                            </div>
                            <div class="card-body">
                                <div class="horizontal-form-elements">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Text Input</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="Some text value...">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" value="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Text Area</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" rows="3" placeholder="Text input"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Readonly</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="Readonly value" readonly="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Disabled</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="Disabled value" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /# column -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Static Control</label>
                                                    <div class="col-sm-10">
                                                        <p class="form-control-static">email@example.com</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Helping text</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Helping text">
                                                        <span class="help-block">
																<small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
															</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Input Select</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Multiple Select</label>
                                                    <div class="col-sm-10">
                                                        <select multiple class="form-control">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /# column -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
@endsection