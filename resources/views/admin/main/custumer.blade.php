@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователи</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        <!-- Таблица пользователей -->
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Пользователи, которые прошли тест</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 100%;">
                <table class="table table-head-fixed text-wrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Дата</th>
                      <th>Имя</th>
                      <th>Телефон</th>
                      <th>Почта</th>
                      <th>Результат теста</th>
                      <th>Действие</th>
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($users as $user)
                      <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                          @foreach ($testResultes as $result)
                              @if ($result->result_user_id === $user->id)
                              <div id="admin_custumer_result">Тест пройден:{{ $result->created_at }}</div>    
                              <div>
                                      
                                    Пок: {{ $result->pok }}
                                    Униж: {{ $result->unig }}
                                    Неспр: {{ $result->nespr }}
                                    Пред: {{ $result->pred }}
                                    Отверг: {{ $result->otverg }}
                                  </div>
                                  
                              @endif
                          @endforeach
                      </td>
                      <td>
                          <form action="{{ route('custumer.delete', $user->id) }}" method="post">
                              @csrf
                              @method('delete')
                                <input type="submit" value="Удалить">
                          </form>
                      </td>
                      </tr>
                      @endforeach
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        <!-- /Таблица пользователей -->

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection