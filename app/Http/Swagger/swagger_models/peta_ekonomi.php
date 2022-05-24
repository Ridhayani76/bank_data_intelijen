<?php

/**
  * @OA\Get(
  *      path="/v1/entities/peta-ekonomi",
  *      operationId="browseD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Browse D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Returns list of D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
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
  *      path="/v1/entities/peta-ekonomi/read?slug=peta-ekonomi&id={id}",
  *      operationId="readD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Get D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan based on id",
  *      description="Returns D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan based on id",
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
  *      path="/v1/entities/peta-ekonomi/add",
  *      operationId="addD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Insert new D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Insert new D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan into database",
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
  *      path="/v1/entities/peta-ekonomi/edit",
  *      operationId="editD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Edit an existing D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Edit an existing D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
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
  *      path="/v1/entities/peta-ekonomi/delete",
  *      operationId="deleteD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Delete one record of D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Delete one record of D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ekonomi",
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
  *      path="/v1/entities/peta-ekonomi/delete-multiple",
  *      operationId="deleteMultipleD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Delete multiple record of D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Delete multiple record of D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ekonomi",
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
  *      path="/v1/entities/peta-ekonomi/sort",
  *      operationId="sortD.IN.4-PetadanSimbolSektorpadaBidangEkonomidanKeuangan",
  *      tags={"peta-ekonomi"},
  *      summary="Sort existing D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      description="Sort existing D.IN.4 - Peta dan Simbol Sektor pada Bidang Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ekonomi",
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