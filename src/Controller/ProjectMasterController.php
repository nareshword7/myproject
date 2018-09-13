<?php

namespace App\Controller;

use App\Entity\ProjectMaster;
use App\Form\ProjectMasterType;
use App\Repository\ProjectMasterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/project/master")
 */
class ProjectMasterController extends AbstractController
{
    /**
     * @Route("/", name="project_master_index", methods="GET")
     */
    public function index(ProjectMasterRepository $projectMasterRepository): Response
    {
        return $this->render('project_master/index.html.twig', ['project_masters' => $projectMasterRepository->findAll()]);
    }

    /**
     * @Route("/new", name="project_master_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $projectMaster = new ProjectMaster();
        $form = $this->createForm(ProjectMasterType::class, $projectMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projectMaster);
            $em->flush();

            return $this->redirectToRoute('project_master_index');
        }

        return $this->render('project_master/new.html.twig', [
            'project_master' => $projectMaster,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_master_show", methods="GET")
     */
    public function show(ProjectMaster $projectMaster): Response
    {
        return $this->render('project_master/show.html.twig', ['project_master' => $projectMaster]);
    }

    /**
     * @Route("/{id}/edit", name="project_master_edit", methods="GET|POST")
     */
    public function edit(Request $request, ProjectMaster $projectMaster): Response
    {
        $form = $this->createForm(ProjectMasterType::class, $projectMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_master_edit', ['id' => $projectMaster->getId()]);
        }

        return $this->render('project_master/edit.html.twig', [
            'project_master' => $projectMaster,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_master_delete", methods="DELETE")
     */
    public function delete(Request $request, ProjectMaster $projectMaster): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projectMaster->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projectMaster);
            $em->flush();
        }

        return $this->redirectToRoute('project_master_index');
    }
}
