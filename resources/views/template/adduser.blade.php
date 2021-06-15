@extends('template.master')
@section('content')
  
<div class="nk-content-body">
    
       
        <!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">   
            <div class="card">
                <div class="card-inner">
                    <form action="#" class="form-validate">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-full-name">Full Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-full-name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-email">Email address</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="fv-email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-password">Password</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">User Type</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control form-select" id="fv-topics" name="usertype" data-placeholder="Select a option" required>
                                            <option label="empty" value=""></option>
                                             @if ($role==1)
                                             <option value="2">Marchant</option>
                                             @elseif ($role==2)
                                             <option value="3">Officer</option>
                                             <option value="4">User</option>
                                             @else
                                             <option value="4">User</option>
                                             @endif 
                                           
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                     
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- .nk-block -->

    
    <!-- .components-preview -->
</div>
     
@endsection