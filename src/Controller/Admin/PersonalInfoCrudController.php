<?php

namespace App\Controller\Admin;

use App\Entity\PersonalInfo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class PersonalInfoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalInfo::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstName'),
            TextField::new('lastName'),
            EmailField::new('mail'),
            TelephoneField::new('phone'),
            TextField::new('address'),
            TextField::new('job'),
            UrlField::new('githubLink'),
            UrlField::new('linkedinLink'),
            UrlField::new('maltLink'),
            UrlField::new('website'),
            TextareaField::new('resume')

        ];
    }
}
