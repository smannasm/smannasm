<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
			.profile-data {
				font-size: 1.2rem;
				font-weight: bold;
			}
      </style>
  </head>
  <body>
    <div class = "container  mt-5">
    <div class="row  mt-5">
        <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
        <a class="nav-link active" id= "profiletab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Профиль</a>
        <a class="nav-link" id="messagestab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Сообщения</a>
        <a class="nav-link" id="settingstab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Настройки</a>
        </div>
        </div>
        <div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div
							class="tab-pane fade show active"
							id="v-pills-profile"
							role="tabpanel"
							aria-labelledby="v-pills-profile-tab"
						>
							<div class="row">
								<div class="col-md-4"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGF2YXRhcnxlbnwwfHwwfHx8MA%3D%3D&w=300&q=70" alt="" width="100%"></div>
								<div class="col-md-8">
									<p class="profile-data">ID: <span><?php echo $_SESSION["id"]; ?></span></p>
									<p class="profile-data">E-mail: <span><?php echo $_SESSION["email"];?></span></p>
									<p class="profile-data">Фамилия и имя: <span><?php echo $_SESSION["name"]; echo " " . $_SESSION["lastname"];?></span></p>
								</div>
							</div>
						</div>
						<div
            class="tab-pane fade"
            id="v-pills-messages"
            role="tabpanel"
            aria-labelledby="v-pills-messages-tab"
          >
            <div class="row">
              <div class="col-sm-5 border-right">
                <div class="row mb-3 shadow-sm">
                  <div class="col-4">
                    <img src="../../img/blog/c2.jpg" alt="" width="100%" />
                  </div>
                  <div class="col-8">
                    <h5>Семен Семеныч</h5>
                    <p>Да, едем в субботу на рыбалку!</p>
                  </div>
                </div>
                <div class="row mb-3 shadow-sm">
                  <div class="col-4">
                    <img src="../../img/blog/c4.jpg" alt="" width="100%" />
                  </div>
                  <div class="col-8">
                    <h5>Ольга-Ольга</h5>
                    <p>Конечно, мы идем в субботу в ресторан.</p>
                  </div>
                </div>
                <div class="row mb-3 shadow-sm">
                  <div class="col-4">
                    <img src="../../img/blog/c1.jpg" alt="" width="100%" />
                  </div>
                  <div class="col-8">
                    <h5>Мария Петрова</h5>
                    <p>Проект надо сдать не позднее вечера пятницы</p>
                  </div>
                </div>
                <div class="row mb-3 shadow-sm">
                  <div class="col-4">
                    <img src="../../img/blog/c3.jpg" alt="" width="100%" />
                  </div>
                  <div class="col-8">
                    <h5>Ирина</h5>
                    <p>Да, смешной анекдот</p>
                  </div>
                </div>
                <div class="row mb-3 shadow-sm">
                  <div class="col-4">
                    <img src="../../img/blog/c6.jpg" alt="" width="100%" />
                  </div>
                  <div class="col-8">
                    <h5>Галина юрист</h5>
                    <p>Это правильный подход?</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-11 ml-auto">
                    <div class="row mb-3 shadow-sm">
                      <div class="col-3">
                        <img
                          src="../../img/blog/avatar.jpg"
                          alt=""
                          width="100%"
                          class="img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <h5>Я</h5>
                        <p>Как насчет идеи с рыбалкой?</p>
                      </div>
                    </div>

                    <div class="row mb-3 shadow-sm">
                      <div class="col-3">
                        <img src="../../img/blog/c2.jpg" alt="" width="100%" />
                      </div>
                      <div class="col-9">
                        <h5>Семен Семеныч</h5>
                        <p>Да, едем в субботу на рыбалку!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-12 p-0">
                    <textarea
                      rows="3"
                      class="form-control"
                      placeholder="Текст сообщения"
                    ></textarea>
                  </div>
                  <div class="col-4 offset-8 mt-3">
                    <button class="btn btn-success">Отправить</button>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="text-center p-3">Список друзей</h3>
            <div class="row mt-5">
              <div class="col-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Фамилия</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody id="userListTable">
                    <!-- Здесь формируем список пользователей <tr> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>

            <div
            class="tab-pane fade"
            id="v-pills-settings"
            role="tabpanel"
            aria-labelledby="v-pills-settings-tab"
          >
            <div class="row p-5">
              <div class="col-12 mb-5">
                <button class="btn btn-success btn-block">Изменить имя</button>
              </div>
              <div class="col-12">
                <button class="btn btn-success btn-block">Изменить фамилию</button>
              </div>
            </div>
          </div>
              
            </div>
          </div>
          
        </div>
        </div>
    </div>

    <!-- Дополнительный JavaScript; выберите один из двух! -->

    <!-- Вариант 1: пакет jQuery и Bootstrap (включает Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script>
        let pathname = location.pathname.split("/")[2];
        if  (pathname == "profile"){
        $("#v-pills-profile").tab("show");
    }else if (pathname == "message"){
        $("#v-pills-profile").tab("show");
        }else if (pathname == "settings"){
            $("#v-pills-profile").tab("show");
        }
        document.getElementById(pathname+"tab").classList.add("active");

        let navlinks =document.querySelectorAll(".nav-link");
        for (let i = 0; i < navlinks.length; i++) {
        navlinks[i].addEventListener("click", () =>{
            let page = navlinks[i].getAttribute("aria-controls").split("v-pills-")[1];
            console.log(page);
history.pushState("","",page);

})
}


    </script>
  </body>
</html>
