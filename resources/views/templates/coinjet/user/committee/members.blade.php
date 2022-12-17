@extends(@activeTemplate().'layouts.master')
@push('style')
<style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .flip-card {
      background-color: transparent;
      width: 130px;
      height: 130px;
      perspective: 1000px;
      margin: 5px 0px 5px 0px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-cards .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front {
      background-color: #bbb;
      color: black;
    }

    .flip-card-back {
      background-color: #ffffff;
      color: #000000 ;
      transform: rotateY(180deg);
    }
    </style>
@endpush

@section('content')
    <div class="container container-plan">
        <div class="row">
          @for($i = 1; $i <= $committee->validity; $i++)
            <div class="col-md-3 col-sm-6 mt-2">
            <div class="flip-card @if(in_array($i,$committeeMembers)) flip-cards @endif" id="card-{{ $i }}" accessKey="{{ $committee->id }}">
                <div class="flip-card-inner">
                    @if(in_array($i,$committeeMembers) || $i==1 || $isfull)
                      <div class="flip-card-front">
                        <img src="{{ asset('assets/images/box-opend.jpg') }}" alt="Avatar" style="width:130px;height:130px;">
                      </div>
                    @else
                      <div class="flip-card-front">
                        <img src="{{ asset('assets/images/cardboard-box.jpg') }}" alt="Avatar" style="width:130px;height:130px;">
                      </div>
                    @endif
                  <div class="flip-card-back">
                        @if($isfull)
                            <h1 style="padding-top: 15px; font-size: 60px;" id="committeeNumber-{{ $i }}">{{ $i }}</h1>
                        @else
                            <span style="padding-top: 15px; font-size: 60px;" id="committeeNumber-{{ $i }}"><img src="{{ asset('assets/images/box-opend.jpg') }}" alt="Avatar" style="width:130px;height:130px;"></span>
                        @endif
                  </div>
                </div>
            </div>
            </div>
            @endfor
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-pricing -->

@endsection

@push('script')
    <script>
        let isMember = @json($committeeMember) ? @json($committeeMember) : {
            committee_number:0
        } ;
        $('.flip-card').on('click',function(e){

            let committeeId = e.currentTarget.accessKey;
            let committeeNumber = $(this.children)[0].children[1].children[0].id.replaceAll("committeeNumber-","");
            
            if((isMember && isMember.committee_number > 0) || committeeNumber == 1){
                return
            }

            $('#'+e.currentTarget.id).addClass('flip-cards')
            $.post("{{route('user.addCommitteeMember')}}",{
                committeeId:committeeId,
                committeeNumber:committeeNumber,
                _token: "{{ csrf_token() }}"
                },
                function(response){
                    isMember.committee_number = committeeNumber;
                    $('.container').prepend(
                        '<div class="alert alert-success" role="alert">'
                        +'<a href="#" class="alert-link">'+response.message+'</a>'
                        +'</div>'
                    )
                }
            )
        });
    </script>
@endpush
