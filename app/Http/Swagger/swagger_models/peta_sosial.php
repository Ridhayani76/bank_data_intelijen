<?php

/**
  * @OA\Get(
  *      path="/v1/entities/peta-sosial",
  *      operationId="browseD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Browse D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Returns list of D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
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
  *      path="/v1/entities/peta-sosial/read?slug=peta-sosial&id={id}",
  *      operationId="readD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Get D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan based on id",
  *      description="Returns D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan based on id",
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
  *      path="/v1/entities/peta-sosial/add",
  *      operationId="addD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Insert new D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Insert new D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan into database",
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
  *      path="/v1/entities/peta-sosial/edit",
  *      operationId="editD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Edit an existing D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Edit an existing D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
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
  *      path="/v1/entities/peta-sosial/delete",
  *      operationId="deleteD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Delete one record of D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Delete one record of D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-sosial",
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
  *      path="/v1/entities/peta-sosial/delete-multiple",
  *      operationId="deleteMultipleD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Delete multiple record of D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Delete multiple record of D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-sosial",
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
  *      path="/v1/entities/peta-sosial/sort",
  *      operationId="sortD.IN.3-PetadanSimbolSektorpadaBidangSosialBudayadanKemasyarakatan",
  *      tags={"peta-sosial"},
  *      summary="Sort existing D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      description="Sort existing D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-sosial",
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