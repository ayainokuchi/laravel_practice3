@extends('layouts.admin')
@section('tittle','新規投稿')

@section('content')

        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
        <h1>新規投稿</h1>
        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿する">
                    <input type="submit" class="btn btn-primary" value="TOPへ戻る" onclick="location.href='/home'">
                    
                </form>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
@endsection