<template>
	<div class="container">
		<div class="row">
			<div class="col-md-10 panel-center">
				<div class="card card-nav-tabs">
					<div class="header header-rose">
						<div class="nav-tabs-navigation">
							<div class="nav-tabs-wrapper">
								<ul class="nav nav-tabs ulcenter" data-tabs="tabs">
									<li>
										<a data-toggle="tab">
											<b>LISTA DE USUARIOS</b>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-content">
						<button class="btn btn-raised btn-round btn-rose  " data-toggle="modal" data-target="#userModal">
							<i class="material-icons">person</i>
								Nuevo Usuario
							<div class="ripple-container"></div>
						</button>
						<div class="tab-content text-center">
							<div class="tab-pane active">
		                        <div class="table-responsive">
			                        <table class="table">
			                            <thead>
			                                <tr>
			                                    <th class="text-center">#</th>
			                                    <th>Name</th>
			                                    <th>Job Position</th>
			                                    <th>Since</th>
			                                    <th class="text-right">Salary</th>
			                                    <th class="text-right">Actions</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <tr>
			                                    <td class="text-center">1</td>
			                                    <td>Andrew Mike</td>
			                                    <td>Develop</td>
			                                    <td>2013</td>
			                                    <td class="text-right">€ 99,225</td>
			                                    <td class="td-actions text-right">
			                                        <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
			                                            <i class="material-icons">person</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
			                                            <i class="material-icons">edit</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
			                                            <i class="material-icons">close</i>
			                                        </button>
			                                    </td>
			                                </tr>
			                                <tr>

			                                    <td class="text-center">2</td>
			                                    <td>John Doe</td>
			                                    <td>Design</td>
			                                    <td>2012</td>
			                                    <td class="text-right">€ 89,241</td>
			                                    <td class="td-actions text-right">
			                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
			                                            <i class="material-icons">person</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
			                                            <i class="material-icons">edit</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
			                                            <i class="material-icons">close</i>
			                                        </button>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class="text-center">3</td>
			                                    <td>Alex Mike</td>
			                                    <td>Design</td>
			                                    <td>2010</td>
			                                    <td class="text-right">€ 92,144</td>
			                                    <td class="td-actions text-right">
			                                        <button type="button" rel="tooltip" class="btn btn-info btn-simple" data-original-title="" title="">
			                                            <i class="material-icons">person</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple" data-original-title="" title="">
			                                            <i class="material-icons">edit</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple" data-original-title="" title="">
			                                            <i class="material-icons">close</i>
			                                        </button>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class="text-center">4</td>
			                                    <td>Mike Monday</td>
			                                    <td>Marketing</td>
			                                    <td>2013</td>
			                                    <td class="text-right">€ 49,990</td>
			                                    <td class="td-actions text-right">
			                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
			                                            <i class="material-icons">person</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
			                                            <i class="material-icons">edit</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
			                                            <i class="material-icons">close</i>
			                                        </button>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class="text-center">5</td>
			                                    <td>Paul Dickens</td>
			                                    <td>Communication</td>
			                                    <td>2015</td>
			                                    <td class="text-right">€ 69,201</td>
			                                    <td class="td-actions text-right">
			                                        <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
			                                            <i class="material-icons">person</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
			                                            <i class="material-icons">edit</i>
			                                        </button>
			                                        <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
			                                            <i class="material-icons">close</i>
			                                        </button>
			                                    </td>
			                                </tr>
			                            </tbody>
			                        </table>
		                    	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
	                    <h2 class="modal-title card-title text-center" id="myModalLabel">NUEVO USUARIO</h2>
	                </div>
	                <div class="modal-body">
	                	<div class="row">
	                		<div class="media media-post">
								<div class="row">
        							<form @submit.prevent="createUser" >
									<div class="col-md-4 text-center">
										<h4><b>Foto de perfil</b></h4>
										<div class="fileinput fileinput-new text-center" data-provides="fileinput">
											<div class="fileinput-new thumbnail img-circle img-raised">
												<img src="assets/img/placeholder.jpg" alt="...">
											</div>
											<div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
											<div>
												<span class="btn btn-raised btn-round btn-rose btn-file">
													<span class="fileinput-new">Añadir Imagen</span>
													<span class="fileinput-exists">Cambiar</span>
													<input type="file" name="foto">
												</span>
												<br>
												<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
											</div>
										</div>
										<div class="media-footer">
			                                <h6>Ingresar con:</h6>
			                                <a href="" class="btn btn-just-icon btn-round btn-twitter">
			                                      <i class="fa fa-twitter"></i>
			                                </a>
			                                <a href="" class="btn btn-just-icon btn-round btn-facebook">
			                                      <i class="fa fa-facebook-square"></i>
			                                </a>
			                                <a href="" class="btn btn-just-icon btn-round btn-google">
			                                      <i class="fa fa-google-plus-square"></i>
			                                </a>
			                            </div>
									</div>
									<div class="col-md-8 text-center">
        	                        	<div class="media-body">
        		                            <div class="row">
        		                                <div class="col-md-6">
				                                    <div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">face</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Nombre completo:</label>
					                                    	<input v-model.trim="form.fullname" type="text" class="form-control" name="fullname" :class="{ 'is-invalid': form.errors.has('fullname') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="fullname"></has-error>
					                                    </div>
				                                    </div>
        		                                </div>
        		                                <div class="col-md-6">
													<div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">stay_current_portrait</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Celular:</label>
					                                    	<input v-model.number="form.celular" type="text" class="form-control" name="celular" :class="{ 'is-invalid': form.errors.has('celular') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="celular"></has-error>
					                                    </div>
				                                    </div>
        		                                </div>
        		                            </div>
        		                            <div class="row">
        		                                <div class="col-md-6">
													<div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">email</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Correo electrónico:</label>
					                                    	<input v-model.trim="form.email" type="text" class="form-control" name="email" :class="{ 'is-invalid': form.errors.has('email') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="email"></has-error>
					                                    </div>
				                                    </div>
        		                                </div>
        		                                <div class="col-md-6">
													<div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">room</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Ubicación:</label>
					                                    	<input  v-model.number="form.formatted_address" type="text" class="form-control" name="formatted_address" :class="{ 'is-invalid': form.errors.has('formatted_address') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="formatted_address"></has-error>
					                                    </div>
				                                    </div>
        		                                </div>
        		                            </div>
        		                            <div class="row">
        		                            	<div class="col-md-6">
													<div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">lock_outline</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Contraseña:</label>
					                                    	<input v-model.trim="form.password" type="password" class="form-control" name="password" :class="{ 'is-invalid': form.errors.has('password') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="password"></has-error>
					                                    </div>
				                                    </div>
        		                            	</div>
        		                            	<div class="col-md-6">
													<div class="input-group">
				                                        <span class="input-group-addon">
				                                            <i class="material-icons">account_balance_wallet</i>
				                                        </span>
				                                        <div class="form-group label-floating is-empty">
					                                    	<label class="control-label">Confirmar contraseña:</label>
					                                    	<input v-model.trim="form.password_confirmation" type="password" class="form-control" name="password_confirmation" :class="{ 'is-invalid': form.errors.has('password_confirmation') }">
					                                    	<span class="material-input"></span>
					                                    	<has-error :form="form" field="password_confirmation"></has-error>
					                                    </div>
				                                    </div>
        		                            	</div>
        		                            </div>
        		                            <div class="media-footer">
												<button class="btn btn-rose btn-round">
													<i class="material-icons">person_pin</i> GUARDAR

												</button>
				                            </div>
        	                        	</div>
        	                    	</div>
        	                    	</form>
        	                    </div>
                          	</div>
	                	</div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
</template>

<script>
    export default {
        data() {
            return {
                users : {},
                form: new Form({
                    id:'',
                    fullname: '',
                    celular: '',
                    email: '',
                    formatted_address: '',
                    foto: '',
                    password: '',
                    password_confirmation: ''
                })
            }
        },
        methods: {
        	 createUser(){

                this.form.post(`/register`)
                .then(()=>{
                	this.form.reset();
                })

	        },
        }
    };
</script>