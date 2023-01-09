@extends('index')
@section('content')
    <div class="col-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Thêm sinh viên </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="{{ route('students.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name_students</label>
                                <input type="text" class="form-control" placeholder="Name_students" name="name_students">
                                <span>
                                         @if($errors->any('name_students'))
                                        {{ $errors->first('name_students') }}
                                    @endif
                                    </span>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Date_of_birth</label>
                                <input type="date" class="form-control" placeholder="Date_of_birth" name="date_of_birth">
                                <span>
                                         @if($errors->any('date_of_birth'))
                                        {{ $errors->first('date_of_birth') }}
                                    @endif
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address">
                                <span>
                                    @if($errors->any('address'))
                                        {{ $errors->first('address') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                                <span>
                                    @if($errors->any('phone'))
                                        {{ $errors->first('phone') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                                <span>
                                    @if($errors->any('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Account</label>
                                <input type="email" class="form-control" placeholder="Account" name="account">
                                <span>
                                    @if($errors->any('account'))
                                        {{ $errors->first('account') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <span>
                                    @if($errors->any('password'))
                                        {{ $errors->first('password') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-radio">
                                <label>Gender</label>
                                <input type="radio" class="form-radio-input" id="gender_male" value="1" name="gender" checked>
                                <label class="form-check-label" for="gender_male">Nữ</label>
                                <input type="radio" class="form-radio-input" id="gender_female" value="0" name="gender">
                                <label class="form-check-label" for="gender_male">Name</label>
                                <input type="radio" class="form-radio-input" id="gender_other" value="2" name="gender">
                                <label class="form-check-label" for="gender_other">Khác</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name_class_codes</label>
                                <select name="class_codes_id">
                                    <option>-Choose-</option>
                                    @foreach( $class_codes as $class_code )
                                        <option value="{{ $class_code->id }}"> {{ $class_code->name_class_codes}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Add student</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

