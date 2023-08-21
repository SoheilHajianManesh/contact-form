<div>
<form class="row justify-content-center" wire:submit.prevent="addPerson">
            
                <div class="col-12 my-3">
                  <img
                    src="https://www.cssscript.com/demo/login-page-template/img/avatar.svg"
                    alt=""
                    style="width: 100px; height: 100px"
                    class="mx-auto d-block"
                  />
                </div>
                <div class="col-12 text-center fs-1 fw-bold">WELCOME</div>
                <div class="col-8 input-height my-3">
                  <div class="input-group mt-3">
                    <span
                      class="input-group-text bg-white border-0 border-bottom border-3 rounded-0 "
                      ><i class="fa-solid fa-user f-color-1 "></i
                    ></span>
                      <input
                        wire:model="username"
                        type="text"
                        class="form-control border-0 border-bottom border-3 pb-5 rounded-0 pt-5"
                        id="floatingInputGroup1"
                        placeholder="Username"
                      />
                  </div>
                </div>
                <div class="col-8 input-height my-5">
                  <div class="input-group mt-3">
                    <span
                      class="input-group-text bg-white border-0 border-bottom border-3 rounded-0 "
                      ><i class="fa-solid fa-user f-color-1 "></i
                    ></span>
                      <input
                        wire:model="password"
                        type="text"
                        class="form-control border-0 border-bottom border-3 pb-5 rounded-0 pt-5"
                        id="floatingInputGroup1"
                        placeholder="Password"
                      />
                  </div>
                </div>
                <div class="col-8 text-end">
                  <a
                    href="#"
                    class="f-color-1 opacity-75 fw-bold text-decoration-none"
                    >Forgot password?</a
                  >
                </div>
                <div class="col-8 mt-3">
                  <input
                    type="submit"
                    class="btn w-100 rounded-pill btn-lg btn-color-1 text-white fw-bold"
                    value="LOGIN"
                    {{-- wire:click.prevent="show()" --}}
                  />
                </div>
                @if($persons)
                <div class="col-8 mt-3">
                  <ul>
                   @foreach($persons as $person)
                      <li>{{$person[0]}} {{$person[1]}}</li>
                   @endforeach
                  </ul>
                </div>
                @endif
          
          </form>
  </div>