@extends('admin.news.master')

@section('javascript')
<script src="//cdn.ckeditor.com/4.4.6/full/ckeditor.js"></script>
@stop

@section('functionArea')
<div class="col-md-8 col-md-offset-1">
    <div class="functionArea">
        {{ Form::open(array('url' => '/manage/news/new', 'name' => 'test', 'role' => 'form', 'class' => 'form-inline')) ;}}
        <div class="row">    
            <div class="btn-group">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
                    新闻分类
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="category">
                    @foreach ($lists as $list)
                    <li role="presentation" value="{{ $list->cat_id }}"><a role="menuitem">{{ $list->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class='form-group' >
                <input class='form-control' name="newsTitle" id="title" type='text' placeholder="新闻标题" width="600px">
            </div>
        </div>
        <div class="row">
            <textarea name="newsContent" id="newsEditor" rows="10" cols="80">
            </textarea>
            <script>
                CKEDITOR.replace('newsEditor');
            </script>
        </div>
        <div class="row">
            <div class="form-group">
                {{Form::submit('发布', $attributes = array(
                                 'id' => 'submit',
                                 'class' => 'form-control btn btn-primary' ));}}
            </div>
        </div>
        {{ Form::close(); }}
    </div>
</div>
@stop