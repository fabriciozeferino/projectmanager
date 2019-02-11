require('./bootstrap')

$(document).ready(function () {

    var CrudObject = {

        registerData: {
            'id': null,
            'repository': ''
        },

        set: function (id, repository) {
            this.registerData.id = id
            this.registerData.repository = repository
        },

        create: function () {
            console.log("create function");
        },

        read: function (event) {

            //Show Modal
            $('#readModal').modal('show')

            let register = $(event.currentTarget);
            let id = register.data('id')
            let repository = register.data('repository')

            $.ajax({
                url: repository + '/' + id,
                type: 'GET',

                data: {
                    'id': id,
                },
                success: function (response) {
                    CrudObject.render(response);
                },
                fail: function (jqXHR, textStatus) {
                    console.log('Request failed: ' + textStatus)
                }
            })
        },
        update: function (event) {

            test = $(event).serializeArray()
            console.log($('form').serializeArray());

            /* $.ajax({
                url: this.registerData.repository + '/' + this.registerData.id,
                type: 'POST',
                data: {
                    'id': this.registerData.id,
                    _method: 'DELETE'
                },
                success: function () {
                    $('#deleteModal').modal('hide')
                },
                fail: function (jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                },
                complete: function (xhr, status) {
                    window.location.reload();
                }
            }) */


            //end update
        },

        delete: function () {

            $.ajax({
                url: this.registerData.repository + '/' + this.registerData.id,
                type: 'POST',
                data: {
                    'id': this.registerData.id,
                    _method: 'DELETE'
                },
                success: function () {
                    $('#deleteModal').modal('hide')
                },
                fail: function (jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                },
                complete: function (xhr, status) {
                    window.location.reload();
                }
            })
        },

        render: function (response) {

			// Input Name
            $('<div/>', {
                class: 'form-group'
            }).append(
                $('<label>', {
                    class: 'col-form-label',
                    text: 'Name',
                    value: response.name
                }),
                $('<input/>', {
                    type: 'text',
                    class: 'form-control user-name',
                    id: 'user-name',
                    name: 'name',
                    value: response.name
				})
			).appendTo('#formModal')

			// Input Email
			$('<div/>', {
                class: 'form-group'
            }).append(
                $('<label>', {
                    class: 'col-form-label',
                    text: 'Email',
                    value: response.email
                }),
                $('<input/>', {
                    type: 'text',
                    class: 'form-control user-emai',
                    id: 'user-email',
                    name: 'email',
                    value: response.email
				})
			).appendTo('#formModal')

			//
			$('<div/>', {
                class: 'form-group'
            }).append(
                $('<label>', {
					class: 'col-form-label',
					id: 'permissions-list',
                    text: 'Roles',
				}),
				$('<select/>', {
                    class: 'custom-select',
                    id: 'permission-select',
                    name: 'user_roles',
					multiple: 'multiple',
				})
                
			).appendTo('#formModal')

			
			$.each(response.permissions, function (i, item) {
				$('#permission-select').append($('<option/>', { 
					value: item.id,
					text : item.name,
				}).prop('selected', true))
			})
			


			console.log(response);
			

            /* 

                    
                        {{-- <input type="text" class="form-control user-roles" id="user-roles" name="roles"> --}}
                        <select class="custom-select" multiple name="user_roles">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
              


                    <div class="form-group">
                        <label for="user-permissions" class="col-form-label">Permissions</label>
                        <input type="text" class="form-control user-permissions" id="user-permissions" name="permissions">
                    </div> */
        },
    }


    //Events


    $('.readBtnModal').on('click', function (event) {

        CrudObject.read(event)

    })

    $('#updateRegister').on('click', function (event) {

        CrudObject.update(event)

    })

    $('.deleteBtnModal').on('click', function (e) {

        let button = $(e.currentTarget)
        let id = button.data('id')
        let repository = button.data('repository')

        CrudObject.set(id, repository)

        $('#deleteModal').modal('show')
    })

    $('.deleteRegisterBtn').click(function (e) {

        CrudObject.delete()
    })


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
})
