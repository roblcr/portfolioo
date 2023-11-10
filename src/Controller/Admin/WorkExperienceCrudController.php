<?php

namespace App\Controller\Admin;

use App\Entity\WorkExperience;
use App\Form\YearType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class WorkExperienceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WorkExperience::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('companyName'),
            TextField::new('location'),
            DateField::new('dateStart'),
            DateField::new('dateEnd'),
            TextareaField::new('resume'),
        ];
    }
}
