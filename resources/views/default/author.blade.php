<div class="guanzhu" id="float">
    @inject('userPresenter','App\Presenters\UserPresenter')
    <?php
    $author = isset($user->id) ? $user : $userPresenter->getUserInfo();
    ?>
    <h2 class="hometitle">关注</h2>
    <ul>
        <?php
        $github_url = '';
        $qq = '';
        if(!isset($user->id)||$user->id == 1){
            $github_url = $systemPresenter->getKeyValue('github_url');
            $weixin = $systemPresenter->getKeyValue('weixin');
        }
        ?>
        <li class="wx"><img src="{{ asset('uploads/avatar')."/".$author->user_pic }}"></li>
        @if ($github_url != "")
         <li class="tencent"><a href="{{ $github_url }}" target="_blank"><span>GitHub</span>Finley</a></li>
         @endif
         @if($weixin != "")
        <li class="qq"><a><span>微信号</span>{{ $weixin }}</a></li>
        @endif
    </ul>
</div>