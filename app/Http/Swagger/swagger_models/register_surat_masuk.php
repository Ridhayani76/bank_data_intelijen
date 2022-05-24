<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-surat-masuk",
  *      operationId="browseR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Browse R.IN.1 - Register Surat Masuk",
  *      description="Returns list of R.IN.1 - Register Surat Masuk",
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
  *      path="/v1/entities/register-surat-masuk/read?slug=register-surat-masuk&id={id}",
  *      operationId="readR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Get R.IN.1 - Register Surat Masuk based on id",
  *      description="Returns R.IN.1 - Register Surat Masuk based on id",
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
  *      path="/v1/entities/register-surat-masuk/add",
  *      operationId="addR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Insert new R.IN.1 - Register Surat Masuk",
  *      description="Insert new R.IN.1 - Register Surat Masuk into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal terima":"Abc", "jam terima":"2021-01-01T00:00:00.000Z", "nomor surat":"Abc", "tanggal surat":"Abc", "asal surat":"Abc", "perihal":"Abc", "tanggal disposisi":"Abc", "disposisi":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-surat-masuk/edit",
  *      operationId="editR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Edit an existing R.IN.1 - Register Surat Masuk",
  *      description="Edit an existing R.IN.1 - Register Surat Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal terima":"Abc", "jam terima":"2021-01-01T00:00:00.000Z", "nomor surat":"Abc", "tanggal surat":"Abc", "asal surat":"Abc", "perihal":"Abc", "tanggal disposisi":"Abc", "disposisi":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-surat-masuk/delete",
  *      operationId="deleteR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Delete one record of R.IN.1 - Register Surat Masuk",
  *      description="Delete one record of R.IN.1 - Register Surat Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-masuk",
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
  *      path="/v1/entities/register-surat-masuk/delete-multiple",
  *      operationId="deleteMultipleR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Delete multiple record of R.IN.1 - Register Surat Masuk",
  *      description="Delete multiple record of R.IN.1 - Register Surat Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-masuk",
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
  *      path="/v1/entities/register-surat-masuk/sort",
  *      operationId="sortR.IN.1-RegisterSuratMasuk",
  *      tags={"register-surat-masuk"},
  *      summary="Sort existing R.IN.1 - Register Surat Masuk",
  *      description="Sort existing R.IN.1 - Register Surat Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-masuk",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal terima":"Abc", "jam terima":"2021-01-01T00:00:00.000Z", "nomor surat":"Abc", "tanggal surat":"Abc", "asal surat":"Abc", "perihal":"Abc", "tanggal disposisi":"Abc", "disposisi":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal terima":"Abc", "jam terima":"2021-01-01T00:00:00.000Z", "nomor surat":"Abc", "tanggal surat":"Abc", "asal surat":"Abc", "perihal":"Abc", "tanggal disposisi":"Abc", "disposisi":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal terima"), 
  *                         @OA\Property(type="string", property="jam terima"), 
  *                         @OA\Property(type="string", property="nomor surat"), 
  *                         @OA\Property(type="string", property="tanggal surat"), 
  *                         @OA\Property(type="string", property="asal surat"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="tanggal disposisi"), 
  *                         @OA\Property(type="string", property="disposisi"), 
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