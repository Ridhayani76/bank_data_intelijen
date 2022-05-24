<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-surat-keluar",
  *      operationId="browseR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Browse R.IN.2 - Register Surat Keluar",
  *      description="Returns list of R.IN.2 - Register Surat Keluar",
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
  *      path="/v1/entities/register-surat-keluar/read?slug=register-surat-keluar&id={id}",
  *      operationId="readR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Get R.IN.2 - Register Surat Keluar based on id",
  *      description="Returns R.IN.2 - Register Surat Keluar based on id",
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
  *      path="/v1/entities/register-surat-keluar/add",
  *      operationId="addR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Insert new R.IN.2 - Register Surat Keluar",
  *      description="Insert new R.IN.2 - Register Surat Keluar into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal terima":"Abc", "nomor surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-surat-keluar/edit",
  *      operationId="editR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Edit an existing R.IN.2 - Register Surat Keluar",
  *      description="Edit an existing R.IN.2 - Register Surat Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal terima":"Abc", "nomor surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-surat-keluar/delete",
  *      operationId="deleteR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Delete one record of R.IN.2 - Register Surat Keluar",
  *      description="Delete one record of R.IN.2 - Register Surat Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-keluar",
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
  *      path="/v1/entities/register-surat-keluar/delete-multiple",
  *      operationId="deleteMultipleR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Delete multiple record of R.IN.2 - Register Surat Keluar",
  *      description="Delete multiple record of R.IN.2 - Register Surat Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-keluar",
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
  *      path="/v1/entities/register-surat-keluar/sort",
  *      operationId="sortR.IN.2-RegisterSuratKeluar",
  *      tags={"register-surat-keluar"},
  *      summary="Sort existing R.IN.2 - Register Surat Keluar",
  *      description="Sort existing R.IN.2 - Register Surat Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-surat-keluar",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal terima":"Abc", "nomor surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal terima":"Abc", "nomor surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal terima"), 
  *                         @OA\Property(type="string", property="nomor surat"), 
  *                         @OA\Property(type="string", property="kepada"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="lampiran"), 
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