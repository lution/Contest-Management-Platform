@extends('layouts.master')

@section('title')
{{{$title or '新闻正文'}}}
@stop

@section('css')
@parent
<link rel="stylesheet" href="/css/news.css">
@stop

@section('main')
<div class="row-fluid">
    <div class="col-md-12">
        <div class="newsTitle">
            {{{$title or ''}}}
        </div>
        
        <div class="newsInfo">
            <p>
                分类：{{{ $name or '默认' }}}
                &nbsp;&nbsp;&nbsp;&nbsp;
                点击：{{{ $clicks or '0' }}}
                &nbsp;&nbsp;&nbsp;&nbsp;
                发布日期：{{{ $create_time or '1970-01-01' }}}
                &nbsp;&nbsp;&nbsp;&nbsp;
                作者：{{{ $author or '管理员' }}}
            </p>
        </div>
        
        <hr class='hrNews' />
        
        <div class="newsContent">
            {{$content}}
        </div>
        {{ isset($attach) ? "<p>附件：<a href='/down/news/$attach'>点击下载</a></p>" : '';  }}
    </div>
</div>
@overwrite
