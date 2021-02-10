<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    /*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout { 
    position: absolute; 
    top: -3px;
    right: 0;
}
.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
    background-size: 120px;
    border-radius: 120px;
}
input[type="file"]{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;    
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;    
    background-color: rgba(0,0,0,.3);
    border-radius: 50px;
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" id="logout">
        
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab">
                            <h4 class="reviews text-capitalize">Comments</h4>
                        </a></li>
                    <li><a href="#add-comment" role="tab" data-toggle="tab">
                            <h4 class="reviews text-capitalize">Add comment</h4>
                        </a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logout">
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle"
                                        src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg"
                                        alt="profile" style="
    width: 77%;
">
                                </a>
                                <div class="media-body">
                                    <div class="well well-lg">
                                        <h4 class="media-heading text-uppercase reviews">Marco </h4>
                                        <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                        </ul>
                                        <p class="media-comment">
                                            Great snippet! Thanks for sharing.
                                        </p>
                                    
                                    </div>
                                </div>
                               
                            </li>
                    
                        </ul>
                    </div>
                    <div class="tab-pane" id="add-comment">
                        <form action="{{ route('Comments.post') }}" method="post" class="form-horizontal" id="commentForm" role="form">
                            <input type="hidden" name="Topic" id="" value="{{ $post->id }}">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="comment" id="addComment"
                                        rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-success btn-circle text-uppercase" type="submit"
                                        id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit
                                        </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" id="login">
      
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-login" role="tab" data-toggle="tab">
                            <h4 class="reviews text-capitalize">Comments</h4>
                        </a></li>
                    <li><a href="#add-comment-disabled" role="tab" data-toggle="tab">
                            <h4 class="reviews text-capitalize">Add comment</h4>
                        </a></li>
                    <li><a href="#new-account" role="tab" data-toggle="tab">
                            <h4 class="reviews text-capitalize">Create an account</h4>
                        </a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-login">
                        <ul class="media-list">
            
                     
                        </ul>
                    </div>
                    <div class="tab-pane" id="add-comment-disabled">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                            <strong>Hey!</strong> If you already have an account <a href="#"
                                class="alert-link">Login</a> now to make the comments you want. If you do not have an
                            account yet you're welcome to <a href="#" class="alert-link"> create an account.</a>
                        </div>
                        <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="addComment" id="addComment" rows="5"
                                        disabled></textarea>
                                </div>
                            </div>
                     
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-success btn-circle text-uppercase disabled" type="submit"
                                        id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit
                                        comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>