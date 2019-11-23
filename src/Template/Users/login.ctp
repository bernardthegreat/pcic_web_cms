<!-- File: src/Template/Users/login.ctp -->


<div class="account-container">
	
	<div class="content clearfix">
		
		
		<?= $this->Form->create() ?>
		
			<h1 class="text-center">CMS Login</h1>		
			
			<div class="login-fields">
				<?= $this->Flash->render('auth') ?>
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<?= $this->Form->control('username', array('placeholder'=>'Username', 'class'=>'login username-field', 'autocomplete'=>'off')) ?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<?= $this->Form->control('password', array('placeholder'=>'Password', 'class'=>'login password-field', 'autocomplete'=>'off')) ?>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
									
				<button class="button btn btn-success btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


