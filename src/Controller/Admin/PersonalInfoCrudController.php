<?php

namespace App\Controller\Admin;

use App\Entity\PersonalInfo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
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
            IdField::new('id'),
            TextField::new('firstName'),
            TextField::new('lastName'),
            TextField::new('job'),
            UrlField::new('githubLink'),
            UrlField::new('linkedinLink'),
            UrlField::new('maltLink'),

        ];
    }
}
