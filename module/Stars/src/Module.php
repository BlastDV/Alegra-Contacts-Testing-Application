<?php 

	namespace Stars;
	use Zend\ModuleManager\Feature\ConfigProviderInterface;
	use Zend\Db\Adapter\AdapterInterface;
	use Zend\Db\ResultSet\ResultSet;
	use Zend\Db\TableGateway\TableGateway;

	class Module implements ConfigProviderInterface
	{
		public function getConfig()
		{
			return include __DIR__.'/../config/module.config.php';
		}

		public function getServiceConfig()
		{
			
		}
	}

?>