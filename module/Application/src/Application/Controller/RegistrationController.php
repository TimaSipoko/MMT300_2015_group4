<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\Customer;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;
use Application\Form\ContactForm;
use Application\Form\RegistrationForm;

class IndexController extends AbstractActionController
{
    protected $customerTable;
    public function indexAction()
    {
        return new ViewModel();
    }
    
     public function getCustomerTable()
     {
         if (!$this->customerTable) {
             $sm = $this->getServiceLocator();
             $this->customerTable = $sm->get('Application\Model\CustomerTable');
         }
         return $this->customerTable;
     }
     
     public function customersAction()
     {
          return new ViewModel(array(
             'customers' => $this->getCustomerTable()->fetchAll(),
         ));
     }
    
    public function contactAction()
    {
        
        if($this->getRequest()->isPost()) 
        {

            // Retrieve form data from POST variables
            $data = $this->params()->fromPost();

            // ... Do something with the data ...
            //var_dump($data);
        }

        return new ViewModel();
    }
    
    public function contactusAction()
    {
        // Check if user has submitted the form
         // Create Contact Us form
        $form = new ContactForm();
        
        // Check if user has submitted the form
        if($this->getRequest()->isPost()) {
            
            // Fill in the form with POST data
            $data = $this->params()->fromPost();            
            
            $form->setData($data);
            
            
            // Validate form
            if($form->isValid()) {
                
                // Get filtered and validated data
                $data = $form->getData();
                
                $customer = new Customer();
                $customer->exchangeArray($data);
                /*$email = $data['email'];
                $subject = $data['subject'];
                $body = $data['body'];
                $payment = $data['payment'];*/
                
                //$customer->exchangeArray($form->getData());
                $this->getCustomerTable()->saveCustomer($customer);
                
                
                /*// Send E-mail
                $mailSender = new MailSender();
                if(!$mailSender->sendMail('no-reply@example.com', $email, $subject, $body)) {
                    // In case of error, redirect to "Error Sending Email" page
                    return $this->redirect()->toRoute('application/default', 
                        array('controller'=>'index', 'action'=>'sendError'));
                }*/
                
                // Redirect to "Thank You" page
                return $this->redirect()->toRoute('application/default', 
                        array('controller'=>'index', 'action'=>'thankYou'));
            }               
        } 
        
        // Pass form variable to view
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    
    public function aboutAction()
    {
        return new ViewModel();
    }
    
    public function registrationAction()
    {
        return new ViewModel();
    }
    public function getinvolvedAction()
    {
        return new ViewModel();
    }
    public function storeAction()
    {
        return new ViewModel();
    }
    public function familyAction()
    {
        return new ViewModel();
    }
    public function storyAction()
    {
        return new ViewModel();
    }
    public function missionAction()
    {
        return new ViewModel();
    }
    public function teamAction()
    {
        return new ViewModel();
    }
    public function volunteerAction()
    {
        return new ViewModel();
    }
    
    public function programmesAction()
    {
        return new ViewModel();
    }
    public function donateAction()
    {
        return new ViewModel();
    }
    public function donorsAction()
    {
        return new ViewModel();
    }
    public function partnersAction()
    {
        return new ViewModel();
    }
    public function cheerleaderAction()
    {
        return new ViewModel();
    }
    
    public function galleryAction()
    {
        return new ViewModel();
    }
    public function techadvisorsAction()
    {
        return new ViewModel();
    }
    public function thankyouAction()
    {
        return new ViewModel();
    }
    
   
    
    
    
}