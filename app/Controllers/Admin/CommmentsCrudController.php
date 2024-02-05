<?php

namespace App\Controller\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommentModel;
use App\Entity\Commments;
use CodeIgniter\Crud\Crud;
use CodeIgniter\Crud\Fields\{IdField, TextEditorField, BooleanField, DateTimeField};



class CommmentsCrudController extends BaseController
{
    public static function getEntityFqcn(): string
    {
        return Commments::class;
    }

    public function configureCrud (Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Commentaires')
            ->setPageTitle('index','Ressources Relationnelles - Administation des commentaires');
    } 

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id_comment'),
            IdField::new('id_user'),
            IdField::new('id_post'),
            TextEditorField::new('text'),
            DateTimeField::new('sendingDate'),
            // BooleanField::new('is_approuved'),
        ];
    }
}