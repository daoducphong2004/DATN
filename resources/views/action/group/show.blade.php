@extends('user.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Thành viên nhóm <strong>Thanhxautrai</strong></div>

                    <div class="panel-body">
                        <!--[if ENDBLOCK]><![endif]-->

                        <div class="alert alert-danger">
                            Không thêm thành viên nếu chưa được sự đồng ý của họ. Cố tình vi phạm sẽ bị xử lý.
                        </div>

                        <table class="table">
                            <tr>
                                <td class="col-xs-8">
                                    <ul class="list-group">
                                        @foreach ($users as $user)
                                        
                                        <li class="list-group-item">
                                            <i class="fas fa-star"></i> phongAhihi123
                                        </li>
                                        @endforeach
                                        
                                        <!--[if BLOCK]><![endif]-->
                                        <li class="list-group-item">Phongdee2004
                                            <button type="button" class="btn btn-warning btn-xs pull-right"
                                                wire:click="remove(179099)">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </li>
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </ul>
                                </td>
                                <td class="col-xs-4">
                                    <form action="{{ route('action.group.adduser') }}">
                                        <div class="input-group">
                                            <input type="text" autocomplete class="form-control" name='username'
                                                placeholder="Tên thành viên">
                                            <input type="hidden" name="group_id" value="{{ $group->id }}">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-add-member" type="button"
                                                   >Thêm</button>
                                            </span>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
