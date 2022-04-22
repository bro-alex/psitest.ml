@extends('user.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="col-6">
          
@if ($testResultes)
<div class="teatclassresult">
  @foreach ($testResultes as $result)
                      
                      <div id="admin_custumer_result">Тест пройден:{{ $result->created_at }}</div>    
                      <div>
                              
                            Пок: {{ $result->pok }}
                            Униж: {{ $result->unig }}
                            Неспр: {{ $result->nespr }}
                            Пред: {{ $result->pred }}
                            Отверг: {{ $result->otverg }}
                          </div>
                          
                      
                  @endforeach
                </div>

@elseif(is_null($testResultes))
<div class="testdiv"><a href="{{ route('test-form') }}" target="_blanc">Пройти тест</a></div>

@endif


        
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection