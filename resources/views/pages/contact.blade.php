@extends('main') <!--Added the main file into there-->
@section('content') <!--Start the content section-->
      <div class="row">
        <div class="col-md-12">
              
            <h1>Contact Us</h1>

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Messafe</label>
                    <textarea id="message" name="message" class="form-control">Type Your Message Here</textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>

            
        </div>
      </div>
      @endsection <!--End the content section area-->      