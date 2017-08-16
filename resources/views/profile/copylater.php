 @foreach ($messo->replies as $reply_message)
    <li class="right clearfix"><span class="chat-img pull-right">
        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
    </span>
        <div class="chat-body clearfix">
            <div class="header">
                <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                <strong class="pull-right primary-font">{{ $reply_message->user->getNameOrUsername() }}</strong>
            </div>
             <p >{{ $reply_message->message }} </p>
        </div>
    </li>
@endforeach