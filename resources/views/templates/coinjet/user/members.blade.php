@extends($activeTemplate.'layouts.master')
@section('content')
<div class="col-lg-12 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Team members</h4>
        <!-- /.box-title -->
        {{-- <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Product</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div> --}}
        <!-- /.dropdown js__dropdown -->
        <table class="table table-striped margin-bottom-10">
            <thead>
                <tr>
                    <th>@lang('Name')</th>
                    <th>@lang('Joined At')</th>
                    <th>@lang('Level')</th>
                    <th>@lang('AAM ID')</th>
                    <th>@lang('Total Earned')</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                <tr>
                    <td>
                        {{ $member->userFrom->name }}
                        
                    </td>
                    <td>
                        {{ showDateTime($member->userFrom->created_at) }}
                        <br>
                        {{ diffForHumans($member->userFrom->created_at) }}
                    </td>
                    <td >{{ $member->level }}</td>
                    <td >{{ $member->userFrom->aam_id }}</td>
                    <td >{{ $member->total }}</td>
                </tr>
                @empty
                    No team members 
                @endforelse
            </tbody>
        </table>
        <!-- /.table -->
        {{$members->links()}}
    </div>
    <!-- /.box-content -->
</div>
@endsection