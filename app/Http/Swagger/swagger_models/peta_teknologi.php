<?php

/**
  * @OA\Get(
  *      path="/v1/entities/peta-teknologi",
  *      operationId="browseD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Browse D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Returns list of D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/peta-teknologi/read?slug=peta-teknologi&id={id}",
  *      operationId="readD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Get D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen based on id",
  *      description="Returns D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/peta-teknologi/add",
  *      operationId="addD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Insert new D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Insert new D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-teknologi/edit",
  *      operationId="editD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Edit an existing D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Edit an existing D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-teknologi/delete",
  *      operationId="deleteD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Delete one record of D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Delete one record of D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-teknologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-teknologi/delete-multiple",
  *      operationId="deleteMultipleD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Delete multiple record of D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Delete multiple record of D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-teknologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-teknologi/sort",
  *      operationId="sortD.IN.6-PetadanSimbolSektorpadaBidangTeknologiInformasidanProduksiIntelijen",
  *      tags={"peta-teknologi"},
  *      summary="Sort existing D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      description="Sort existing D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-teknologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="peta"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */