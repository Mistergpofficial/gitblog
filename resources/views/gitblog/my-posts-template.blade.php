 <div class="row">
<div class="col-md-6 col-md-offset-3">          
        <h1 class="">My Posts</h1>

        <div class="col-md-6 col-md-offset-3">{{ $user->full_name }}</div> 
        <br>
          @if($user->posts->count() > 0)
            <table class="table table-bordered">
                 <thead>
                <tr> 
               
                </tr>
                </thead>

                <thead>
                <tr> 
                    <th>Total No of Posts</th>
                    <th>Total No of Comments</th>
                  
                </tr>
                </thead>
                

                <tbody>
                <tr>
                        <th>{{ $user->posts->count() }}</th>
                        <th>{{ $user->comments->count() }}</th>
                     
                 </tr>
                </tbody>
            </table>
             @else
            <div class="alert alert-info">There is no post till now. Login and write a new post now!!!</div>
        @endif
</div>
</div>
        