@extends( 'wechat.template.master' )

@section( 'scripts' )
@parent
<script type="text/javascript" src="/dist/wechat/js/pages/rules.js"></script>
@stop

@section( 'content' )
    @if( isset( $project ) )
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/rules-title.png" class="section-header-img">
    </div>
    <div class="section-content">
        {{$project->content}}
    </div>
</div>
<hr class="split-line">
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/register-period.png" class="section-header-img">
    </div>
    <div class="section-content section-single-line">
        {{$project->sign_up_start}} --------- {{$project->sign_up_stop}}
    </div>
</div>
<hr class="split-line">
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/vote-period.png" class="section-header-img">
    </div>
    <div class="section-content section-single-line">
         {{$project->vote_start}} ---------  {{$project->vote_stop}}
    </div>
</div>
@endif
@stop

@section('navigation')
@include( 'wechat.components.navigation' )
@stop
