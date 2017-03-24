<?php 

	namespace Stars\Controller;

	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;

	class StarsController extends AbstractActionController
	{
		public function __construct()
		{

		}

		public function indexAction()
		{
			return new ViewModel
			(
				
			);
		}
	}

?>