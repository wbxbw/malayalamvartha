@extends('wbxadmin.layout')
@section('content')
<div id="top" class="sa-app__body">
   <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
      <div class="container container--max--lg">
         <div class="py-5">
            <div class="row g-4 align-items-center">
               <div class="col">
                  <nav
                     class="mb-2"
                     aria-label="breadcrumb"
                     >
                     <ol
                        class="breadcrumb breadcrumb-sa-simple"
                        >
                        <li class="breadcrumb-item">
                           <a href="index.html"
                              >Dashboard</a
                              >
                        </li>
                        <li class="breadcrumb-item">
                           <a
                              href="app-settings-toc.html"
                              >Users</a
                              >
                        </li>
                        <li
                           class="breadcrumb-item active"
                           aria-current="page"
                           >
                           Settings
                        </li>
                     </ol>
                  </nav>
                  <h1 class="h3 m-0">Manage Permission</h1>
               </div>
               <!-- <div class="col-auto d-flex">
                  <a
                     href="#"
                     class="btn btn-secondary me-3"
                     >Reset</a
                     ><a href="#" class="btn btn-primary"
                     >Save</a
                     >
               </div> -->
            </div>
         </div>
         <div class="card mt-5">
            <div class="card-body p-5">
               <div class="mb-5">
                  <h2 class="mb-0 fs-exact-18">
                     Edit Permission
                  </h2>
               </div>
               <form action="{{ route('users.permissionupdate', $user['id']) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  @foreach($userModules as $userModule)
                  <div class="mb-4">
                     <div class="form-label">
                     {{ $userModule->module->name }}
                     </div>
                     <div>
                        <label class="form-check form-check-inline mb-0">
                           <input type="radio" class="form-check-input module-radio" name="module_id_{{$userModule->id}}" value="Y" {{ $userModule->status == 'Y' ? 'checked' : '' }}>
                           <span class="form-check-label">Enable</span>
                        </label>
                        <label class="form-check form-check-inline mb-0">
                           <input type="radio" class="form-check-input module-radio" name="module_id_{{$userModule->id}}" value="N" {{ $userModule->status == 'N' ? 'checked' : '' }}>
                           <span class="form-check-label">Disable</span>
                        </label>
                     </div>
                  </div>
                  <div class="editPermission_{{$userModule->id}}" style="{{ $userModule->status == 'Y' ? '' : 'display:none;' }}">
                     <table width="100%" border ="0" cellspacing="0" cellpadding="0" class="listing" id = "dataTable">
                        <tbody>
                           <tr>
                              <td width="25%"><strong>Manage Pages</strong></td>
                              <td width="75%"></td>
                           </tr>
                           @foreach ($userModule->module->pages as $page)
                              @if ($page->view == 'Y' || $page->add == 'Y' || $page->edit == 'Y' || $page->delete == 'Y')
                                 @foreach ($page->userPages as $userPage)
                                    @if ($userPage->user_id == $user['id'])
                                       <tr>
                                          <td width="25%">{{ $page->name }}</td>
                                          <td width="75%">
                                             @if($page->view == 'Y')
                                             <input type="checkbox" name="view_{{$userPage->id}}" <?php if($userPage->page_view == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             @endif
                                             @if($page->add == 'Y')
                                             <input type="checkbox" name="add_{{$userPage->id}}" <?php if($userPage->page_add == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             @endif
                                             @if($page->edit == 'Y')
                                             <input type="checkbox" name="edit_{{$userPage->id}}" <?php if($userPage->page_edit == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input">
                                             Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             @endif
                                             @if($page->delete == 'Y')
                                             <input type="checkbox" name="delete_{{$userPage->id}}" <?php if($userPage->page_delete == 'Y'){ ?> checked <?php } ?> value="Y" class="form-check-input" />
                                             Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             @endif
                                          </td>
                                       </tr>
                                    @endif
                                 @endforeach
                              @endif
                           @endforeach
                        </tbody>
                     </table>
                     <div class="spacer"></div>
                  </div>
                  </br>
                  @endforeach
                  <div class="card-body p-5">
                     <div class="form-colum">
                     <div class=" d-flex justify-content-end mt-5">
                        <input type="submit" class="btn btn-secondary me-3" name="Save"/>
                        <a href="#" class="btn btn-primary">Cancel</a>
                     </div>
                     </div>
                  </div>
               </form>
         </div>
      </div>
   </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const moduleRadios = document.querySelectorAll('.module-radio');

        moduleRadios.forEach(function (radio) {
            radio.addEventListener('change', function () {
                const moduleId = this.name.replace('module_id_', '');
                const editPermission = document.querySelector('.editPermission_' + moduleId);

                if (this.value === 'Y') {
                    editPermission.style.display = '';
                } else {
                    editPermission.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection
